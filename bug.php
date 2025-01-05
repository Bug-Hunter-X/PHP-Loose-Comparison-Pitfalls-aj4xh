function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false; 
}

function testFoo() {
  console.log(foo(1, '1')); //true
  console.log(foo(1, 1)); //true
  console.log(foo(0, false)); //true
  console.log(foo(null, false)); //true
  console.log(foo(0, null)); //true
}
testFoo();