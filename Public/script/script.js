fetch('../http/get.php')
.then(response => response.json())
.then(data => {
    data.forEach(element => {
        const creatP = document.createElement('p');
        creatP.textContent = element.nom
            document.body.appendChild(creatP);
        
    });
})
const taskAdd = document.getElementById('taskForm')
taskAdd.addEventListener('submit', function(event) {
    event.preventDefault(); 

    const taskName = document.getElementById("taskName").value;
    const formData = new FormData(taskAdd);

    formData.append('taskName',taskName)
    console.log(formData.get('taskName'))
    fetch("../http/post.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("La requête a échoué.");
        }
        return response.json();
    })
    .then(data => {
      
        console.log(data);
    })
    .catch(error => {
      
        console.error(error);
    });
});
