<?php
namespace dummies;
class com{
  const version='0.1.0';
  const info='just dummy for sample';
  public function test(){
    return 'yes, this is a test';
  }
  public function help(){
    $info=$this::info;
    $version=$this::version;
    return <<<EOD
{$info}
Version {$version}

  $ ai dummies.com <option>

Options:
  test   Testing output
  help   Show this information
  
Example:
  $ ai dummies.com test
  
EOD;
  }
}
