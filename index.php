 <?php

                        ////////// 1 //////////

// $age=20;
// if($age >= 18 )
// {
//    echo "accept";
 
// }
// else
// {
//     echo "reject";
// }

                         ////////// 2 //////////

// function calc($x , $y)
// {
//     echo "multipliction = " . $x*$y . "<br>";
//     echo "difference = " .$x-$y ."<br>";
//     echo "division = " .$x/$y;
// }

// calc(10,5);

                         ////////// 3 //////////

// $numburs=[1 , 4 , 8 , 5 , 9];
// function sum($numburs)
// {
//     $sum=0;
//     foreach ($numburs as $numbur)
//         {
//             $sum= $sum+$numbur;
//         }
//         return $sum;
// }
// echo sum($numburs);

                         ////////// 4 //////////

//  $films=["Fast", "Predestination", "Persuit", "Prestige"];
//  $keyword = "avatar";
//  foreach($films as $film)
//     {
//         if($film == $keyword)
//             {
//                 echo "YES";
//                 break;
//             }
//         else
//             {
//                 echo "NO";
//                 break;
//             }

//     }   

                        ////////// 5 //////////

// function RouteBubble($arr)
// {
//     $n = count($arr);

//     for ($i = 0; $i < $n - 1; $i++)
//     {
//         for ($j = 0; $j < $n - $i - 1; $j++)
//         {
//             if ($arr[$j] > $arr[$j + 1])
//             {
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;
//             }
//         }
//     }

//     return $arr;
// }

// $numbers = [5, 3, 8, 2, 1];

// $result = RouteBubble($numbers);

// print_r($result);

                              ////////// 6 //////////

// $tests=array(5,4,9,3,1,7,5,8,6); 
 
// function maxnumber($tests) 
// {
//     $max=0;
//     foreach($tests as $test)
//         {
//           if ($test > $max)
//             {
//                 $max = $test;
//             }
//         }
//         return $max;
// }                          
// echo maxnumber($tests);


                            ////////// 7 //////////

  

// $films = array("avatar", "Prestige", "avatar", "Prestige");

// $keyword = "avatar";

// $count = 0;

// foreach ($films as $film)
// {
//     if ($film == $keyword)
//     {
//         $count++;
//     }
// }

// echo $count;

                         /////////// 8 /////////


// function RouteRandomPass($n)
// {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

//     $randomString = '';

//     for ($i = 0; $i < $n; $i++)
//     {
//         $index = random_int(0, strlen($characters) - 1);

//         $randomString .= $characters[$index];
//     }

//     return $randomString;
// }

// echo RouteRandomPass(6);

                         ////////// 9 //////////


// $tests = array(1, "tariq", 1.5, true, 7, 's', false);

// for ($i = 0; $i < count($tests); $i++)
// {
//     if (gettype($tests[$i]) == "boolean")
//     {
//         if ($tests[$i] == true)
//         {
//             echo "Yes<br>";
//         }
//         else
//         {
//             echo "NO<br>";
//         }
//     }
//     else
//     {
//         echo $tests[$i] . "<br>";
//     }
// }


/////////////////////////////////////////////////


// $tests = array(1, "tariq", 1.5, true, 7, 's', false);

// $i = 0;

// while ($i < count($tests))
// {
//     if (gettype($tests[$i]) == "boolean")
//     {
//         if ($tests[$i] == true)
//         {
//             echo "Yes<br>";
//         }
//         else
//         {
//             echo "NO<br>";
//         }
//     }
//     else
//     {
//         echo $tests[$i] . "<br>";
//     }

//     $i++;
// }

                       ////////// 10 ///////////


// $tests = array(6, 4, 9, 3, 12, 8, 7);

// for ($i = 0; $i < count($tests) - 1; $i++)
// {
//     for ($j = 0; $j < count($tests) - $i - 1; $j++)
//     {
//         if ($tests[$j] > $tests[$j + 1])
//         {
//             $temp = $tests[$j];
//             $tests[$j] = $tests[$j + 1];
//             $tests[$j + 1] = $temp;
//         }
//     }
// }

// print_r($tests);

                           ////////// 11 /////////

// $arr1 = array('a', 'b', 'c', 'd');
// $arr2 = array('c', 'd', 'e', 'f');

// $result = array();

// foreach ($arr1 as $value)
// {
//     if (in_array($value, $arr2))
//     {
//         $result[] = $value;
//     }
// }

// echo implode("-", $result);


                          /////////// 12 ///////////







if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Check if inputs are numbers
    if (!is_numeric($price) || !is_numeric($quantity))
    {
        echo "must enter a number";
    }

    // Check if numbers are negative
    elseif ($price < 0 || $quantity < 0)
    {
        echo "you cannot enter negative numbers";
    }

    else
    {
        // Calculate total price
        $total = $price * $quantity;

        // Calculate discount
        if ($total < 1000)
        {
            $discount = $total * 0.10;
        }
        else
        {
            $discount = $total * 0.15;
        }

        // Price after discount
        $afterDiscount = $total - $discount;

        echo "Total before discount: " . $total . " EGP<br>";
        echo "Discount: " . $discount . " EGP<br>";
        echo "Total after discount: " . $afterDiscount . " EGP";
    }

}

?>

















