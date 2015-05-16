<?php

namespace PathByIdGenerator;

use InvalidArgumentException;

class PathByIdGenerator
{

    /**
     * generate folder path like /00/08/25/22/91
     *
     * @param int $objectId
     * @param int $pathLength
     * @param int $step
     *
     * @throws InvalidArgumentException
     *
     * @return string
     */
    public function generatePath($objectId, $pathLength = 10, $step = 2)
    {
        if (empty($objectId) || !is_numeric($objectId)) {
            throw new InvalidArgumentException('$objectID must be numeric');
        }

        if (strlen($objectId) > $pathLength) {
            throw new InvalidArgumentException('$objectID cannot be less than $pathLength');
        }

        // add zeros: "0008252291"
        $stringId = str_repeat('0', ($pathLength - strlen($objectId))) . $objectId;

        // prepare path "/00/08/25/22/91"
        $path = '';
        for ($i = 0; $i < $pathLength; $i += $step) {
            $path .= '/' . substr($stringId, $i, $step);
        }

        return $path;
    }
}
