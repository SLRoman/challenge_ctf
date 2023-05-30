<?php
$files = scandir('./');
$files = array_diff($files, array('.', '..'));
$files1 = $files;
$files = [];
foreach ($files1 as $file){
    if (strpos($file, '.') !== 0 and strpos($file, 'index') !== 0) {
        $files[] = $file;
    }
}


echo '<table>';
for ($i = 0; $i < count($files); $i += 4) {
        $filename1 = './' . $files[$i];
        $fileinfo1 = '<td>' . $files[$i] . '</td>';

        $filename2 = './' . $files[$i + 1];
        $fileinfo2 = '<td>' . $files[$i + 1] . '</td>';

        $filename3 = './' . $files[$i + 2];
        $fileinfo3 = '<td>' . $files[$i + 2] . '</td>';

        $filename4 = './' . $files[$i + 3];
        $fileinfo4   = '<td>' . $files[$i + 3] . '</td>';

        echo '<tr>' . $fileinfo1 . $fileinfo2 . $fileinfo3 . $fileinfo4 .'</tr>';
}
echo '</table>';
echo '<style>table { border-collapse: collapse; } th, td { border: 1px solid #ccc; padding: 5px; } th { background-color: #f0f0f0; }</style>';
