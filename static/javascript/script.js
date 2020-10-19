function createAnimeHTML()
{
    clearHTML();
    var html = '<div class="para2 lead">\n' +
        '<div class="borderPara text-center">\n' +
        '<h2>Insert new Anime</h2>\n' +
        '</div>\n' +
        '<form method="post" action="admin.php">\n' +
        '<label>English Title</label>\n' +
        '<input type ="text" name="txtEnTitle"><br>\n' +
        '<label>Japanese Title</label>\n' +
        '<input type ="text" name="txtJaTitle"><br>\n' +
        '<label>Synopsis</label>\n' +
        '<div>\n' +
        '<textarea name="textSynopsis" rows="4" cols="50"></textarea>\n' +
        '</div>\n' +
        '<br>\n' +
        '<label>Genre 1</label>\n' +
        '<select name="selGenre1">\n' +
        '<option value="">----</option>\n' +
        '<option value="Action">Action</option>\n' +
        '<option value="Adventure">Adventure</option>\n' +
        '<option value="Comedy">Comedy</option>\n' +
        '<option value="Drama">Drama</option>\n' +
        '<option value="SliceOfLife">Slice of Life</option>\n' +
        '<option value="Fantasy">Fantasy</option>\n' +
        '<option value="Horror">Horror</option>\n' +
        '<option value="Mystery">Mystery</option>\n' +
        '<option value="Psychological">Psychological</option>\n' +
        '<option value="Romance">Romance</option>\n' +
        '<option value="Sci-Fi">Sci-Fi</option>\n' +
        '</select>\n' +
        '<label>Genre 2</label>\n' +
        '<select name="selGenre2">\n' +
        '<option value="">----</option>\n' +
        '<option value="Action">Action</option>\n' +
        '<option value="Adventure">Adventure</option>\n' +
        '<option value="Comedy">Comedy</option>\n' +
        '<option value="Drama">Drama</option>\n' +
        '<option value="SliceOfLife">Slice of Life</option>\n' +
        '<option value="Fantasy">Fantasy</option>\n' +
        '<option value="Horror">Horror</option>\n' +
        '<option value="Mystery">Mystery</option>\n' +
        '<option value="Psychological">Psychological</option>\n' +
        '<option value="Romance">Romance</option>\n' +
        '<option value="Sci-Fi">Sci-Fi</option>\n' +
        '</select>\n' +
        '<br>\n' +
        '<label>Review</label>\n' +
        '<div>\n' +
        '<textarea name="textReview" rows="4" cols="50"></textarea>\n' +
        '</div>\n' +
        '<br>\n' +
        '<label>Score Visual</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreVisual"><br>\n' +
        '<label>Score Story</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreStory"><br>\n' +
        '<label>Score Character</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreCharacter"><br>\n' +
        '<label>Score Pacing</label>\n' +
        '<input type="number" min="0" max="10"  name="numScorePacing"><br>\n' +
        '<label>Score Music</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreMusic"><br>\n' +
        '<label>Image</label>\n' +
        '<div>\n' +
        '<input type="file" name="fileImage"><br>\n' +
        '</div>\n' +
        '<input type="submit" value="Add" class="centeredButton">\n' +
        '</form>\n' +
        '</div>\n';

    document.getElementById('data').innerHTML += html;
}
function modifyAnimeHTML()
{
    clearHTML();
    var html = '<div class="para2 lead">\n' +
        '<div class="borderPara text-center">\n' +
        '<h2>Modify Anime</h2>\n' +
        '</div>\n' +
        '<form method="post" action="admin.php">\n' +
        '<div class="animeList">\n' +
        '</div>\n' +
        '<label>English Title</label>\n' +
        '<input type ="text" name="txtEnTitle" id="txtEnTitle"><br>\n' +
        '<label>Japanese Title</label>\n' +
        '<input type ="text" name="txtJaTitle" id="txtJaTitle"><br>\n' +
        '<label>Synopsis</label>\n' +
        '<div>\n' +
        '<textarea name="textSynopsis" id="textSynopsis" rows="4" cols="50"></textarea>\n' +
        '</div>\n' +
        '<br>\n' +
        '<label>Genre 1</label>\n' +
        '<select name="selGenre1" id="selGenre1">\n' +
        '<option value="">----</option>\n' +
        '<option value="Action">Action</option>\n' +
        '<option value="Adventure">Adventure</option>\n' +
        '<option value="Comedy">Comedy</option>\n' +
        '<option value="Drama">Drama</option>\n' +
        '<option value="SliceOfLife">Slice of Life</option>\n' +
        '<option value="Fantasy">Fantasy</option>\n' +
        '<option value="Horror">Horror</option>\n' +
        '<option value="Mystery">Mystery</option>\n' +
        '<option value="Psychological">Psychological</option>\n' +
        '<option value="Romance">Romance</option>\n' +
        '<option value="Sci-Fi">Sci-Fi</option>\n' +
        '</select>\n' +
        '<label>Genre 2</label>\n' +
        '<select name="selGenre2" id="selGenre2">\n' +
        '<option value="">----</option>\n' +
        '<option value="Action">Action</option>\n' +
        '<option value="Adventure">Adventure</option>\n' +
        '<option value="Comedy">Comedy</option>\n' +
        '<option value="Drama">Drama</option>\n' +
        '<option value="SliceOfLife">Slice of Life</option>\n' +
        '<option value="Fantasy">Fantasy</option>\n' +
        '<option value="Horror">Horror</option>\n' +
        '<option value="Mystery">Mystery</option>\n' +
        '<option value="Psychological">Psychological</option>\n' +
        '<option value="Romance">Romance</option>\n' +
        '<option value="Sci-Fi">Sci-Fi</option>\n' +
        '</select>\n' +
        '<br>\n' +
        '<label>Review</label>\n' +
        '<div>\n' +
        '<textarea name="textReview" id="textReview" rows="4" cols="50"></textarea>\n' +
        '</div>\n' +
        '<br>\n' +
        '<label>Score Visual</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreVisual" id="numScoreVisual"><br>\n' +
        '<label>Score Story</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreStory" id="numScoreStory"><br>\n' +
        '<label>Score Character</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreCharacter" id="numScoreCharacter"><br>\n' +
        '<label>Score Pacing</label>\n' +
        '<input type="number" min="0" max="10"  name="numScorePacing" id="numScorePacing"><br>\n' +
        '<label>Score Music</label>\n' +
        '<input type="number" min="0" max="10"  name="numScoreMusic" id="numScoreMusic"><br>\n' +
        '<label>Image</label>\n' +
        '<div>\n' +
        '<input type="file" name="fileImage" id="fileImage"><br>\n' +
        '</div>\n' +
        '<input type="submit" value="Modify" class="centeredButton">\n' +
        '</form>\n' +
    '</div>\n';

    document.getElementById('data').innerHTML += html;

    $.ajax({
        url: 'static/javascript/animeList.php',
        success: function(data) {
            $('.animeList').html(data);
        }
    });

}
function deleteAnimeHTML()
{
    clearHTML();
}
function viewStatsHTML()
{
    clearHTML();
}
function clearHTML()
{
    document.getElementById('data').innerHTML = "";
}