var elms = {};
var options = {

    fadeIn: 500,
    data: '',
    selectors: [
        '.show_image',
        '#global-modal'
    ],
    modalsOpt: {
        fastIn: 250,
        slowIn: 750,
        callUs: '#call-us',
        modal: '#global-modal',
    }
};

$.each(options.selectors, function (i, selector) {
    var prop = selector.replace(/#|\./g, '');
    elms[prop] = $(selector);
});

setElementEvents();

function setElementEvents() {
    elms['show_image'].on('click', function (e) {
        e.preventDefault();
        showModalForm();
    });

    elms['global-modal'].on('click', function (e) {
        e.preventDefault();
        closeModalForm();
    });
}

function closeModalForm() {
    elms['global-modal'].fadeOut(options.modalsOpt.fastIn);
}

function showModalForm() {
    elms['global-modal'].fadeIn(options.modalsOpt.fastIn);
}