//hoisting is is concept throuth which we can use or access the variable and function before declaration


// var a = 10;
// function fun(){
//     console.log("this is function");
// }
// console.log(a);
// fun();
// in the above code we are able to access the variable a and function fun after declaration but in case of let and const we can't access the variable before declaration because of temporal dead zone



// console.log(fun)           // this will should be undefined but it display entire funciton code becouse at the time of the memory creation the fun store the entire funciton code 
// console.log(a);            // this will be undefined 
// fun();                     // this will diplay entire code of the function

// var a = 10;
// function fun(){
//     console.log("this is function");
// }





// console.log(fun)
// fun();
// console.log(a);          // now this will show error(not define) becouse of temporal dead zone(means we have not declared the variable accross the the code)


// function fun(){
//     console.log("this is function");
// }




// fun();                      // this will show error(that fun is not a function) beacause at the time of memory creation the fun is actiong like variable that stores undefined
// var a = 10;
// var fun = ()=>{
//     console.log("this is function");
// }



// console.log(fun);               //here it will show undefined because at the time of memory creation the fun is acting like variable that stores undefined   
// var a = 10;
// var fun = ()=>{
//     console.log("this is function");
// }
 

console.log(a);       //ITS NOT acting like a var and not created memory with the undefined value and this called temperal deadzone
console.log(p);
let a = 10;
const p = 14.7;
//TDZ = Time where a let/const variable exists but cannot be accessed until initialized.
//Because JavaScript was fixed after it was already broken — not redesigned from scratch.
//var came first, and it has problems. let/const were added later to solve those problems, so they behave differently on purpose, not by accident.



