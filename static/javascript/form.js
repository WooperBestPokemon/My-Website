function showAnime(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var answer = JSON.parse(this.responseText);
            document.getElementById("txtEnTitle").value = answer.title;
            document.getElementById("txtJaTitle").value = answer.title_jpn;
            document.getElementById("textSynopsis").value = answer.synopsis;
            $('#selGenre1 option:contains(' + answer.genre_1 + ')').attr('selected', 'selected');
            if(answer.genre_2 !== "")
                $('#selGenre2 option:contains(' + answer.genre_2 + ')').attr('selected', 'selected');
            else
                $('#selGenre2 option:contains(' + "" + ')').attr('selected', 'selected');
            document.getElementById("textReview").value = answer.review;
            document.getElementById("numScoreVisual").value = answer.score_visual;
            document.getElementById("numScoreStory").value = answer.score_story;
            document.getElementById("numScoreCharacter").value = answer.score_character;
            document.getElementById("numScorePacing").value = answer.score_pacing;
            document.getElementById("numScoreMusic").value = answer.score_music;
        }
    };
    xmlhttp.open("GET","static/javascript/getanime.php?query="+id,true);
    xmlhttp.send();
}
function createAnime()
{
    var title = document.getElementById("txtEnTitle").value;
    var titleJPN = document.getElementById("txtJaTitle").value;
    var synopsys = document.getElementById("textSynopsis").value;
    var genre1 = document.getElementById("selGenre1").value;
    var genre2 = document.getElementById("selGenre2").value;
    var review = document.getElementById("textReview").value;
    var scoreVisual = document.getElementById("numScoreVisual").value;
    var scoreStory = document.getElementById("numScoreStory").value;
    var scoreCharacter = document.getElementById("numScoreCharacter").value;
    var scorePacing = document.getElementById("numScorePacing").value;
    var scoreMusic = document.getElementById("numScoreMusic").value;
    var img = document.getElementById("fileImage").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            writeMessage(title + " has been created successfully :3");
            //todo - empty the form without reloading the page
        }
    };
    xmlhttp.open("GET","static/javascript/createAnime.php?title="+title+"&titleJPN="+titleJPN+"&synopsys="+synopsys+"&genre1="+genre1+"&genre2="+genre2+"&review="+review+"&scoreVisual="+scoreVisual+"&scoreStory="+scoreStory+"&scoreCharacter="+scoreCharacter+"&scorePacing="+scorePacing+"&scoreMusic="+scoreMusic+"&img="+img,true);
    xmlhttp.send();
}
function modifyAnime()
{
    var id = document.getElementById("idAnime").value;
    var title = document.getElementById("txtEnTitle").value;
    var titleJPN = document.getElementById("txtJaTitle").value;
    var synopsys = document.getElementById("textSynopsis").value;
    var genre1 = document.getElementById("selGenre1").value;
    var genre2 = document.getElementById("selGenre2").value;
    var review = document.getElementById("textReview").value;
    var scoreVisual = document.getElementById("numScoreVisual").value;
    var scoreStory = document.getElementById("numScoreStory").value;
    var scoreCharacter = document.getElementById("numScoreCharacter").value;
    var scorePacing = document.getElementById("numScorePacing").value;
    var scoreMusic = document.getElementById("numScoreMusic").value;
    var img = document.getElementById("fileImage").value;
    //todo - Modify review and Synopsys
    synopsys = synopsys.replace(/'/gi, "\\'")
    review = review.replace(/'/gi, "\\'")

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            writeMessage(title + " has been modified successfully :D");
        }
    };
    xmlhttp.open("GET","static/javascript/modifyAnime.php?id="+id+"&title="+title+"&titleJPN="+titleJPN+"&synopsys="+synopsys+"&genre1="+genre1+"&genre2="+genre2+"&review="+review+"&scoreVisual="+scoreVisual+"&scoreStory="+scoreStory+"&scoreCharacter="+scoreCharacter+"&scorePacing="+scorePacing+"&scoreMusic="+scoreMusic+"&img="+img,true);
    xmlhttp.send();
}
function deleteAnime()
{
    var id = document.getElementById("idAnime").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            writeMessage(title + " has been deleted successfully ;3;");
        }
    };
    xmlhttp.open("GET","static/javascript/deleteAnime.php?id="+id,true);
    xmlhttp.send();
}

function writeMessage(str)
{
    //todo - create a small message in html then disappears after 3 seconds
}