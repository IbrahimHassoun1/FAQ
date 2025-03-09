function register(event) {
    event.preventDefault()
    const form = document.getElementById("register")
    const formData = new FormData(form)
    var data=[]
    formData.forEach((value, key) => {
        data.push({ [key]: value });
    });
    console.log(data)

    try{

    }catch(error){
        console.log(error)
    }

}