## Jawaban Soal Online Test Wakimart
#### Jawaban 1 : palindrome
```
<?php
function palindrome($arr, $n)
{

	$isPalindrome 	=	true;

	for ($i = 0; $i <= $n / 2 && $n != 0; $i++)
	{
		if ($arr[$i] != $arr[$n - $i - 1])
		{
			$isPalindrome = false;
			break;
		}
	}

	return $isPalindrome;
}

$arrCheck 	= 	['M', 'A', 'L', 'A', 'M'];
$arrCount 	= 	count($arrCheck);

 if(palindrome($arrCheck, $arrCount))
 	echo "benar";
 else
 	echo "salah";
?>

```

#### Jawaban 2: anagram

```

<?php
	function anagram($strOne, $strTwo)
	{
		$isAnagram  =	false;
		if (count_chars($strOne, 1) == count_chars($strTwo, 1))
			$isAnagram 	=	true;
		return $isAnagram;
		
	}

	if(anagram('ABC', 'BCD'))
		echo "benar";
	else
		echo "salah";
	
?>

```

#### Jawaban 3 : query mysql

```
SELECT harga_promo.id as id, product.name as Nama_Product1, p.name as Nama_Product2, harga_promo.price as Harga_Promo FROM harga_promo JOIN promo ON promo.id = harga_promo.promo_id JOIN product ON product.id = promo.product1_id JOIN product as p ON p.id = promo.product2_id 
```
