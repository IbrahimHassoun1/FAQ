const url = "http://localhost/faq/"

document.addEventListener("DOMContentLoaded",getAllQuestions)

async function getAllQuestions(){
    try{
        const response = await axios.get(url+"server/question/getAllQuestions.php")
        console.log(response.data.result)
        const table=document.getElementById("table")
        response.data.result.forEach(row=>{
            const component = document.createElement('div')
            component.innerHTML=`<p class='title'>${row.question}</p>
            <hr>
            <p>${row.answer}</p>`
            component.classList.add("question-component")
            
            table.appendChild(component)
        })
    }catch(error){
        console.log(error)
    }
}
function search() {
    console.log("filtering started");
    const searchInput = document.getElementById("search").value.toLowerCase();
    const questionsList = document.querySelectorAll(".question-component");

    questionsList.forEach(question => {
        const title = question.querySelector(".title");  
        if (title && title.textContent.toLowerCase().includes(searchInput)) {
            question.classList.remove("hidden");  
        } else {
            question.classList.add("hidden");  
        }
    });
}