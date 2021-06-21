<?php

namespace func;

const LIST_STRING = 'a aa 1 1a 1ab 11';

function getDifferenceInList($str1, $str2) {
  $LIST_STRING_EXPLODED = explode(' ', LIST_STRING);

  // Find place of the first string
  $str1Place = null;
  for ($i = 0; $i < count($LIST_STRING_EXPLODED); $i++) {
    $guessedStr = $LIST_STRING_EXPLODED[$i];

    if ($guessedStr === $str1) $str1Place = $i;
  }

  // Find place of the second string
  $str2Place = null;
  for ($i = 0; $i < count($LIST_STRING_EXPLODED); $i++) {
    $guessedStr = $LIST_STRING_EXPLODED[$i];

    if ($guessedStr === $str2) $str2Place = $i;
  }

  return $str1Place - $str2Place;
}