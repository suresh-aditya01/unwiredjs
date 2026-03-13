// // alert("hello world!");
// console.log("saisuresh");
// let firstname = 'Shubham';
// let lastname = "sarda";
// let videos = 10;
// let subcriber = 4500;
// console.log(firstname + lastname);
// console.log(firstname.toUpperCase());
// console.log(lastname.toUpperCase());
// console.log(firstname[0]);

// console.log(firstname.indexOf("h"));
// console.log(firstname.lastIndexOf("h"));
// console.log(firstname.replace("h", "-"));
// console.log(firstname.replaceAll("h", "-"));

// console.log(firstname);
// console.log(firstname.includes("Shu"));

// let result = `youtube channel  ${firstname}  ${lastname} has ${videos} videos  and  ${subcriber} subscribers `;

// console.log(result);



let products = ["bread", "butter", "salt", "jam", 20];
// let update = ["pizza", "water"];
// // console.log(products.join(" ")); 
// console.log(products.indexOf("bread"));
// console.log(products.indexOf(20));
// console.log(products.length);
// console.log(products.concat(update));
// // console.log(products.concat(["water", "bottle"]));
// console.log(products);
// console.log(products.push("bottle", "water"));
// console.log(productsmethod = products.pop());
// // console.log(productsmethod);
// console.log(products);
// let age = 25;
// console.log(age == 25);
// console.log(age === "25");
// console.log(typeof age)

// console.log(typeof "25")

///---- type conversion----///
// let random = "25";
// console.log(typeof random);
// let age = Number(random);
// console.log(typeof age);
// let year = 1996;
// console.log(typeof year);
// let yearString = String(year);
// console.log(typeof yearString);
// ------loops------//
let students = ["subham", "alex", "mark", "deepak"];
for (let j = 0; j < students.length; j++) {
    console.log(students[j]);
}
for (let sai of students) {
    console.log(sai)
}

let user = {
    name: "Sai",
    role: "Developer",
    exp: 2
};

for (let sai in user) {
    console.log(sai, user[sai]);
}

let nums = [10, 20, 30];

for (let ex in nums) {
    console.log(ex, nums[ex]);
}


let count = 0;
while (count < students.length) {
    console.log(students[count]);
    count++;
}

/// -----logical-operators-----///
console.log(!true);
console.log(!false);
let loggedIn = "";
// console.log(loggedIn);
if (loggedIn) {
    console.log("hello!");
}
else {
    console.log("else case");
}

//// break and continue ////
// let ratings = [7, 8, 5, 3, 0, 6, 10, 7, 8];
// for (let i = 0; i < ratings.length; i++) {
//     if (ratings[i] == 0) {
//         // console.log("SKIP");
//     }
//     console.log(`Rating:${ratings[i]}`);
// }

/// switch-case///
let rating = "5";
switch (rating) {
    case "5":
        console.log("Must Watch");
        break;
    case "B":
        console.log("Ignore");
        break;
    case "C":
        console.log("see");
        break;

    case "D":
        console.log("Skip");
        break;
    case "E":
        console.log("Neglect");
        break;

    default:
        console.log("Invalid");

}


// Ternary operator///
const student = false;
student ? console.log("true value") : console.log("false value");


const username = "shubham";
username.length >= 10 ? (console.log("above 5")) : (console.log("below 5"));


const res = username.length >= 5 ? username.length : 0;
console.log(res);
/// functions ///
addition()
function addition() {
    sum = 2 + 6;
    console.log(sum);
}
addition()
// let intro = function () {
//     console.log("welcome to the course!");
// };
// intro();

// Arguments and parameters///
function welcome(name) {
    console.log(name);
}
welcome("hello");


function addition(numOne, numTwo) {
    let result = numOne + numTwo;
    console.log(result);

}
addition(5, 105);
// console.log(addition);

function fullname(firstname, lastname) {
    result = firstname + " " + lastname;
    return result;
}
// let value = fullname("subham", "sarda");
console.log(fullname("subham", "sarda"));

let intro = () => {
    console.log("WELCOME ARROW");
};
intro()
let Welcome = (name, name1) => {
    console.log("WELCOME", name, name1);
}
Welcome("hello", "hi");


let WelcomE = name2 =>
    `WELCOME ${name2}`;
;
console.log(WelcomE("SHUBH"));

let add = function (a, b) {
    return a + b;
}
function calculator(num1, num2, add) {
    console.log(add(num1, num2, add))
}
calculator(5, 10, add);


let Products = ["bread", "butter", "jam", "bottle"];

Products.forEach((products, index) => {
    console.log(products, index);
});


// Object literals
let User = {
    name: "saisuresh",
    email: "saisuresh@gmail.com",
    age: 25,
    isLoggedIn: false,
    login: function () {
        console.log("LOGIN");
    },
    logout: function () {
        console.log("LOGOUT");
    }
};
console.log(User);
console.log(User.name);
console.log(User.isLoggedIn);
User.isLoggedIn = true;
console.log(User.isLoggedIn);
//  Keys...

let key = "name";
console.log(User[key]);
console.log(typeof User);
// methods  //
User.login();
User.logout();
function show() {
    console.log(this);
}
show();

// objects in arrays
let Users = [{}, {}, { ka: "hello" }];
console.log(Users);

// Primitve versus  Reference types 

