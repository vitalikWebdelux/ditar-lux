<?php /*Template Name: Front*/ get_header();  
$n=10; 
$array = [];
$array2 = [];
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
function getName2($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 


for ($i=0; $i < 1000000; $i++) { 
	$array[] = getName($n);
}

for ($i=0; $i < 10; $i++) { 
$array2[] = getName2($n);
	print_r($array2);

}

// echo $key = array_search('8purFOqW3m', $array);
echo $key2 = array_search('0mFLvNJbgZ', $array2);

?>

<?php get_footer(); ?>

Треба згенерувати строки і записати в базу даних!!!