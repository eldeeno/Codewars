function detect_pangram($string) { 
  #your code here
  $alphabets = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  $ispangram = false;
  
  $alphabet = str_split($string);
  foreach($alphabet as $character) {
    if(ctype_alpha($character)) {
      ctype_upper($character) ? $character = strtolower($character): $character;
      
      $key = array_search($character, $alphabets);
      if ($key !== false) {
        unset($alphabets[$key]);
      }
    }
  }
  
  $ispangram = !$alphabets ? $ispangram = true: $ispangram;
  return $ispangram;
}
