<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

function test(): int {
  list($x, $y) = varray[1, 2];
  return $x;
}

function test2(varray<int> $x): int {
  list($x, $y) = $x;
  return $x;
}

function test3(varray<int> $x): bool {
  list($x, $y) = $x;
  return $x;
}
