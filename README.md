# PathByIdGenerator

Master:
[![Build Status](https://travis-ci.org/t4web/PathByIdGenerator.svg?branch=master)](https://travis-ci.org/t4web/PathByIdGenerator)
[![codecov.io](http://codecov.io/github/t4web/PathByIdGenerator/coverage.svg?branch=master)](http://codecov.io/github/t4web/PathByIdGenerator?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/t4web/PathByIdGenerator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/t4web/PathByIdGenerator/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f31d9b25-5bd9-4f9c-8fb5-4a4591faa8ea/mini.png)](https://insight.sensiolabs.com/projects/f31d9b25-5bd9-4f9c-8fb5-4a4591faa8ea)
[![Dependency Status](https://www.versioneye.com/user/projects/5557420e95febe50ad0000f1/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5557420e95febe50ad0000f1)

Generation path by (int) id

Usage
-------------
```php
$this->generator = new PathByIdGenerator();

$resultPath = $this->generator->generatePath(8252291, 12);
// $resultPath will be /00/00/08/25/22/91

$resultPath = $this->generator->generatePath(8252291, 12, 3);
// $resultPath will be /000/008/252/291
```
