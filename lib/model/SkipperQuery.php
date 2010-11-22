<?php


/**
 * Skeleton subclass for performing query and update operations on the 'skipper' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * Fri Sep 24 12:55:44 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class SkipperQuery extends BaseSkipperQuery {

	/**
	 * Returns a new SkipperQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SkipperQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SkipperQuery) {
			return $criteria;
		}
		$query = new self();
		if (null !== $modelAlias) {
			$query->setModelalias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // SkipperQuery