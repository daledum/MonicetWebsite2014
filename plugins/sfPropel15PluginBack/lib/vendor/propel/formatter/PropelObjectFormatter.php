<?php

/*
 *  $Id: PropelObjectFormatter.php 1585 2010-02-26 08:28:11Z francois $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://propel.phpdb.org>.
 */

/**
 * Object formatter for Propel query
 * format() returns a PropelObjectCollection of Propel model objects
 *
 * @author     Francois Zaninotto
 * @version    $Revision: 1585 $
 * @package    propel.runtime.formatter
 */
class PropelObjectFormatter extends PropelFormatter
{
	protected $collectionName = 'PropelObjectCollection';
	
	public function format(PDOStatement $stmt)
	{
		$this->checkCriteria();
		if($class = $this->collectionName) {
			$collection = new $class();
			$collection->setModel($this->class);
			$collection->setFormatter($this);
		} else {
			$collection = array();
		}
		if ($this->getCriteria()->isWithOneToMany()) {
			$pks = array();
			while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
				$object = $this->getAllObjectsFromRow($row);
				$pk = $object->getPrimaryKey();
				if (!in_array($pk, $pks)) {
					$collection[] = $object;
					$pks[] = $pk;
				}
			}
		} else {
			while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
				$collection[] =  $this->getAllObjectsFromRow($row);
			}
		}
		$stmt->closeCursor();
		
		return $collection;
	}
	
	public function formatOne(PDOStatement $stmt)
	{
		$this->checkCriteria();
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$result = $this->getAllObjectsFromRow($row);
		} else {
			$result = null;
		}
		$stmt->closeCursor();
		
		return $result;
	}
	
	public function isObjectFormatter()
	{
		return true;
	}
	
	/**
	 * Hydrates a series of objects from a result row
	 * The first object to hydrate is the model of the Criteria
	 * The following objects (the ones added by way of ModelCriteria::with()) are linked to the first one
	 *
	 *  @param    array  $row associative array indexed by column number,
	 *                   as returned by PDOStatement::fetch(PDO::FETCH_NUM)
	 *
	 * @return    BaseObject
	 */
	public function getAllObjectsFromRow($row)
	{
		list($obj, $col) = call_user_func(array($this->peer, 'populateObject'), $row);
		foreach ($this->getCriteria()->getWith() as $join) {
			$startObject = $join->getObjectToRelate($obj);
			$peer = $join->getTableMap()->getPeerClassname();
			list($endObject, $col) = call_user_func(array($peer, 'populateObject'), $row, $col);
			// as we may be in a left join, the endObject may be empty
			// in which case it should not be related to the previous object
			if ($endObject->isPrimaryKeyNull()) {
				continue;
			}
			$relation = $join->getRelationMap();
			if ($relation->getType() == RelationMap::ONE_TO_MANY) {
				$method = 'add' . $relation->getName();
			} else {
				$method = 'set' . $relation->getName();
			}
			$startObject->$method($endObject);
		}
		foreach ($this->getCriteria()->getAsColumns() as $alias => $clause) {
			$obj->setVirtualColumn($alias, $row[$col]);
			$col++;
		}
		return $obj;
	}

}