<?php echo (!$ObservationPhoto->getPhotographer())? '&nbsp;': $ObservationPhoto->getPhotographer()->getCode()/*.' - '.$ObservationPhoto->getPhotographer()->getName()*/ ?>