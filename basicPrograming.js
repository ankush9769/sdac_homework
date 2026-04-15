// var a = "hello";
// function hello(){
//     // console.log(a);
//     var b = "hey";
// }
// console.log(a);
// hello();

// console.log(z);
// let z;
// console.log(y);
// var y;
console.log(0.1 + 0.2);





// number is prime or not
// let num = 3;
// let isprime = true;
// for(let i = 2;i<num;i++){
//     if (num%i==0){
//         isprime = false;
//         break;
//     }
// }
// if(isprime){
//     console.log("number is prime");
// }
// else{
//     console.log("number is not prime")
// }


// let num = 5
// let fact = 1;
// for(let i = 1;i<=num;i++){
//     fact = fact * i;
// }
// console.log(fact);


//palindrom
// let num =121;
// let sage = num;
// let reverse = 0;
// while(num != 0){
//     let i = num % 10;
//     reverse = (reverse*10)+i;
//     num = Math.floor(num/10);
// }
// console.log(reverse);

//armstrong
// let num = 1223;
// let num2 = num
// let len = num2.toString().length;
// console.log(len);
// let sum =0;
// while(num != 0){
//     let i = num % 10;
//     sum = sum + i**len;
//     num = Math.floor(num/10);
// }
// console.log(sum);


//fibonacci series
// let n=10;
// let n1 = 0;
// let n2 = 1;
// console.log(n1);
// console.log(n2);
// for(let i = 1; i<=(n-2);i++){
//     let temp = n1+n2
//     console.log(temp);
//     n1=n2;
//     n2=temp;
// }


//perfect squre
// let num = 11;
// let persquare = false;
// for (let i = 1; i <= (num / 2); i++) {
//     if (i * i == num) {
//         persquare = true;
//         break;
//     }
//     persquare = false;
// }
// if (persquare) {
//     console.log("yes this perfect square number");
// }
// else {
//     console.log("no not this perfect square number");
// }



//replace all 0's with 1
// let num = 430091010;
// let rev =0;
// while(num != 0){
//     let i = num % 10;
//     if(i==0){
//         i = 1;
//     }
//     rev = (rev*10)+i;
//     num = Math.floor(num/10);
// }
// console.log(rev);
// let num2 =0;
// while(rev != 0){
//     let i = rev % 10;
//     num2 = (num2*10)+i;
//     rev = Math.floor(rev/10);
// }
// console.log(num2)


//ocurance of the each number 
// let num = 19811871651;
// let num2 = num.toString();
// let count ={}
// for (let digit of num2){
//     count[digit]=(count[digit] || 0)+1;
// }
// console.log(count);


// swap number without using third variable
// let n1 = 12;
// let n2 = 13;
// n1 = n1 + n2;
// n2 = n1 - n2;
// n1 = n1 - n2;
// console.log("n1="+n1);
// console.log("n2="+n2)


//sorting an array
// let array = [3,6,1,8,7,9];
// for(let i =0;i<array.length;i++){
//     for(let j=0;j<array.length;j++){
//         if(array[i]<array[j]){
//             let temp = array[i];
//             array[i] = array[j];
//             array[j] = temp;
//         }
//     }
// }
// console.log(array);


// let name = "ankushank";
// let count ={};

// for(let l1 of name){
//     count[l1]=(count[l1] || 0)+1;
// }
// console.log(count)


//check the two string  is anagram or not
// let s1 = "listen";
// let s2 = "silent";
// let is = false;
// if(s1.length == s2.length){
//     for(let l of s1){
//         for(let m of s2){
//             if(l == m){
//                 is = true;
//                 break;
//             }else{
//                 is = false;
//             }
//         }
//         if(is == false){
//             console.log("not")
//             break;
//         }
//         is = true;
//     }
//     if(is == true){
//         console.log("yes same")
//     }
// }
// else{
//     console.log("not same")
// }


let s1 = "ab@cd#m"
// out = "md@cb#a"
let out = "";
// for(let s of s1){
//     if(s==='@' || s==='#'){
//         out = s + out;
//         console.log(out)
//     }
//     else{
//         out = s + out;
//         console.log(out);
//     }
// }
// console.log(out);
let obj = {};
for (let s = 0; s < s1.length; s++) {
    if (s1[s] === '@' || s1[s] === '#') {
        obj[s1[s]] = s;
    }
}
console.log(obj)
for (let s of s1) {
    if (s === '@' || s === '#') {
        continue;
    }
    else{
        out = s + out;
    }
}
console.log(out);
let fins = "";
for(let z=0 ;z<s1.length;z++){
    if(s1[z] === '@' || s1[z]=== '#'){
        fins = fins + s1[z];
    }
        fins = fins + out[z];

}
console.log(s1)
console.log(fins);






