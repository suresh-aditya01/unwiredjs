// let description = document.querySelectorAll('div p');
// description.forEach(paragraph=> 
//     console.log(paragraph) );
// // console.log(description);
// let selector=document.getElementById("website-name");
//   console.log(selector);
//   let selectorClass=document.getElementsByClassName("active");
//   console.log(selectorClass);
//   let selectorTag=document.getElementsByTagName("p");
//   console.log(selectorTag);

///// controlling content //////
// let subheading =document.querySelector(".sub-heading");
// console.log(subheading.innerHTML)
// subheading.innerText+="--Updated Sub Heading----";
// console.log(subheading.innerHTML)
// let liHead=document.querySelectorAll
// ("ul.top-nav li");
// liHead.forEach((element)=>{element.innerText+="  suresh";}); 
// let subHeading=document.querySelector(".sub-heading");
// subHeading.innerHTML = "<h5>----------</h5>";

// let subHeading=document.querySelector("ul.top-nav");
// subHeading.innerHTML="<li>Register</li> " +subHeading.innerHTML;

// 152_Attributes(Get/Set)//
// const link =document.querySelector("a");
// console.log(link);  
// link.getAttribute('href');
// console.log(link.getAttribute('target'));
// link.setAttribute("href", "www.example.com");
// console.log(link.getAttribute("href"));
// link.setAttribute("target","_ blank");
// const activeClasses=document.querySelectorAll(".active");
// activeClasses.forEach(active=>{ 
    // console.log(active.getAttribute("class"));
    // active.setAttribute("class","highlight");
    // console.log(active.getAttribute("class"));   

// });
//////    changing css styles  ///////
// const brandname=  document.querySelector("#website-name");
// brandname.setAttribute("style","color:blue;");
// console.log(brandname.style.margin); 
// brandname.style.margin="50px";
// console.log(brandname.style.margin);
// brandname.style.color="blue";     

//  brandname.style.fontSize="30px"; 
//  console.log(brandname.style.fontSize);

/// classes(add/remove) ///
const heading=document.querySelector("h1");
heading.classList.add("highlight");  
heading.classList.remove("blog-heading");   
