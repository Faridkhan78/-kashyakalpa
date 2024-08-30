
function tooglep() {
  let p = document.getElementById("info3");
  if (p.style.display == "block") {
    console.log(p.style.display);
    p.style.display = "block";
  } else {
    p.style.display = "block";

  }
}

function tooglep1() {
  let p = document.getElementById("info3");
  if (p.style.display == "none") {
    p.style.display = "none";
  } else {
    p.style.display = "none";
  }
}


//button Count value 1 row for adult

let count = 0;
const maxCount = 10;

function increment() {
  if (count < maxCount) {
    count++;
    updateCounter();
  }
}

function decrement() {
  if (count > 0) {
    count--;
    updateCounter();
  }
}

let adult = 0;

function updateCounter() {
  document.getElementById("counter").textContent = count;
  document.getElementById("counterValue").value = count;
  document.getElementById("counterValue").value = count; // Update hidden input value
  // document.getElementById("total").innerHTML = count * 500;

  adult = count * 500;
  final_count(adult, kids);
}

// second button kids
let count1 = 0;
const maxCount1 = 10;
function increment1() {
  if (count1 < maxCount1) {
    count1++;
    updateCounter1();
  }
}

function decrement1() {
  if (count1 > 0) {
    count1--;
    updateCounter1();
  }
}

let kids = 0;
function updateCounter1() {
  document.getElementById("counter1").textContent = count1;
  document.getElementById("counterValue1").value = count1;
  document.getElementById("counterValue1").value = count1; // Update hidden input value
  // document.getElementById("total").innerHTML = count1 * 250;
  kids = count1 * 250;
  final_count(adult, kids);
}

//third button in infant
let count2 = 0;
const maxCount2 = 10;
function increment2() {
  if (count2 < maxCount2) {
    count2++;
    updateCounter2();
  }
}

function decrement2() {
  if (count2 > 0) {
    count2--;
    updateCounter2();
  }
}
function updateCounter2() {
  // console.log(count2 * 30);
  document.getElementById("counter2").textContent = count2;
  document.getElementById("counterValue2").value = count2;
  document.getElementById("counterValue2").value = count2; // Update hidden input value

}


let final_total = 0;
function final_count(adult, kids) {

  final_total = adult + kids;

  // console.log(final_total);
  document.getElementById("total").innerHTML = final_total;
}
