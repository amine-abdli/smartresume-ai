function analyzeCV() {
    let cv = document.getElementById("cv_text").value;
    if(!cv) return;

    let resultDiv = document.getElementById("result");
    resultDiv.innerHTML = "Loading...";

    fetch("analyze.php",{
        method:"POST",
        headers: {"Content-Type":"application/x-www-form-urlencoded"},
        body: "cv="+encodeURIComponent(cv)
    })
    .then(res=>res.text())
    .then(data=>{
        resultDiv.innerHTML = data;
    });
}