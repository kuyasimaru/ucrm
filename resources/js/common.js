const nl2br = (str) =>{
    var res = str.replace(/\r\n/g, "<br>");
    res =res.replace(/\r\n/g, "<br>");
    return res;
}

export { nl2br }