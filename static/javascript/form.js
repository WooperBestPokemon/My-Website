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
