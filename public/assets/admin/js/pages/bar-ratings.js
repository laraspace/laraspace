$(document).ready(function () {

    $('#br-1to10').barrating('show', {
        theme: 'bars-1to10'
    });

    $('#br-movie').barrating('show', {
        theme: 'bars-movie'
    });

    $('#br-movie').barrating('set', 'Mediocre');

    $('#br-square').barrating('show', {
        theme: 'bars-square',
        showValues: true,
        showSelectedRating: false
    });

    $('#br-pill').barrating('show', {
        theme: 'bars-pill',
        initialRating: 'A',
        showValues: true,
        showSelectedRating: false,
        allowEmpty: true,
        emptyValue: '-- no rating selected --',
        onSelect: function (value, text) {
            alert('Selected rating: ' + value);
        }
    });

    $('#br-reversed').barrating('show', {
        theme: 'bars-reversed',
        showSelectedRating: true,
        reverse: true
    });

    $('#br-horizontal').barrating('show', {
        theme: 'bars-horizontal',
        reverse: true,
        hoverState: false
    });

    $('#br-fontawesome').barrating({
        theme: 'fontawesome-stars',
        showSelectedRating: false
    });

    $('#br-css').barrating({
        theme: 'css-stars',
        showSelectedRating: false
    });

});