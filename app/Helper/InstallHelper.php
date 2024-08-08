<?php
namespace App\Helper;

class InstallHelper
{
    public function getPhinxResult(string $output): array
    {
        $result = [
            'status' => 'error',
            'time_elapsed' => null,
            'message' => null
        ];

        if (preg_match('/All Done\. Took (\d+\.\d+[smh])/', $output, $matches) === 1) {
            $result['status'] = 'success';
            $result['time_elapsed'] = $matches[1];
        }

        if (preg_match_all('/== (.*+)/', $output, $matches) > 0) {
            $result['message'] = $matches[1];
        }

        return $result;
    }
}
