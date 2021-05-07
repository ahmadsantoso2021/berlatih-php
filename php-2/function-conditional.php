<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        function greetings($nama){
            echo "$nama, Selamat Datang di Penus!";
        }


        // Hapus komentar untuk menjalankan code!
        greetings("Bagas");echo "<br>";
        greetings("Wahyu");echo "<br>";
        greetings("Abdul");echo "<br>";
        

      

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
 
        // Code function di sini 
        function reverseString($kata){
           
            $length = strlen($kata);  
            for ($i=($length-1) ; $i >= 0 ; $i--)   
            {  
              echo $kata[$i];  
            }  
        }



        // Hapus komentar di bawah ini untuk jalankan Code
        reverseString("abduh");echo "<br>";
        reverseString("Sanbercode");echo "<br>";
        reverseString("We Are Sanbers Developers");echo "<br>";
        echo "<br>";

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : "true"
            palindrome("jambu") => output : "false"
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */


        // Code function di sini
        // example to get the palindrome of a string using built in function
//input string is MADAM

function palindrome ($a){

    $count=0;
  
    for($i=0;$i<strlen($a);$i=$i+1)
    {
    if($a{$i}==$a{strlen($a)-$i-1})
    {
    $count=$count+1;
    }
    }
    if($count==strlen($a))
    echo "The string is a palindrome/true";
    else
    echo "The string is not a palindrome/false";
    
    
       
    
    }

        
        // Hapus komentar di bawah ini untuk jalankan code
        palindrome("civic") ; echo "<br>";// true
        palindrome("nababan") ;echo "<br>"; // true
        palindrome("jambaban"); echo "<br>";// false
        palindrome("racecar"); echo "<br>";// true
    ?>
</body>
</html>
