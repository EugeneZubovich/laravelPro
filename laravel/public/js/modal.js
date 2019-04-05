var elms = {};
var options = {

    fadeIn: 500,
    data: '',
    selectors: [
        '.show_image',
        '#global-modal',
        '.modal-content'
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
        var productId =$(this).attr('data-id');
        e.preventDefault();
        showModalForm();
        getContentById(productId);
    });

    elms['global-modal'].on('click', function (e) {
        e.preventDefault();
        closeModalForm();
    });
}

function closeModalForm() {
    elms['global-modal'].fadeOut(options.modalsOpt.fastIn, function () {
        elms['modal-content'].html('');
    });

}

function showModalForm() {
    elms['global-modal'].fadeIn(options.modalsOpt.fastIn);

}

function getContentById(id){
    // if (id = ''){
    //     param = 'test'
    // }
    // else {
    //     param = id;
    // }
    var param = '15';
    $.ajax({
        type: 'POST',
        url: "ajax/modal",
        data: 'id='+id,
        success: function (data) {
            elms['modal-content'].append(data)
        },
        error: function (msg) {
            console.log('error');
            console.log(msg.text);
        }
    });
}