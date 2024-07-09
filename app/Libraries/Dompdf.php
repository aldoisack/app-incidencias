<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_lib extends Dompdf
{
    public function __construct()
    {
        parent::__construct();
    }
}
