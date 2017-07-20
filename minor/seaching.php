<?php







function compareFiles($file_a, $file_b)
{
    if (filesize($file_a) == filesize($file_b))
    {
        $fp_a = fopen($file_a, 'rb');
        $fp_b = fopen($file_b, 'rb');

        while (($b = fread($fp_a, 4096)) !== false)
        {
            $b_b = fread($fp_b, 4096);
            if ($b !== $b_b)
            {
                fclose($fp_a);
                fclose($fp_b);
                return false;
            }
        }

        fclose($fp_a);
        fclose($fp_b);

        return true;
    }

    return false;
}


if(compareFiles('C:\wamp64\www\Log\a.txt', 'C:\wamp64\www\Log\b.txt'))
{
	echo "Matching";
}
else
{
echo "Not Matching";	
}

?>