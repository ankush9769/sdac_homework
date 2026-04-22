
// function fun(){
//     console.log(b); //means somehow it has access to globle variable inside the function
//     pri();
//     function pri(){
//         console.log(b);
//     }
// }
// fun();
// var b = 10;



//same with let
// function fun(){
//     console.log(b); //means somehow it has access to globle variable inside the function
//     pri();
//     function pri(){
//         console.log(b);
//     }
// }
// let b = 10;
// fun();



// function fun(){
//     var b = 10; //but if you define in the function then you cant access it to outside of the funtion 
//     pri();
//     function pri(){
//         console.log(b);
//     }
// }
// fun();
// console.log(b);


//same with let
function fun(){
    let b = 10; //but if you define in the function then you cant access it to outside of the funtion 
    pri();
    function pri(){
        console.log(b);
    }
}
fun();
console.log(b);
