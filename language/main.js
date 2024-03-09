function setLang(Lang) {
    window.localStorage.setItem('lang', Lang);
    window.location.reload();
}
function getLang() {
    if (typeof localStorage['lang'] == undefined) {
        window.localStorage.setItem('lang', 'vi-VN');
    }
    return window.localStorage.getItem('lang');
}
function changeLang() {
    var lang = getLang();
    $('span.multilang').each((i, obj) => {
        $("#" + obj.id).html(labels[obj.id][lang]).attr("title", labels[obj.id][lang]);
    })
}

function showCourseList() {
    var lang = getLang();
    $.each(courseList, function (i, obj) {
        btn = "<td><div class='d-grid gap-2'><button class='btn btn-success btn-lg' onclick = 'regCourse(\"" + i + "\")' > <i class='fa fa-check-square'></i></button ></div ></td > ";
        $("#course_list").append("<tr><td>" + obj.code
            + "</td><td> " + obj.name[lang] + "</td ></td ><td class='text-end'>"
            + (new Date(obj.startDate)).toLocaleDateString(lang) + "</td><td class='text-end'>"
            + (new Date(obj.endDate)).toLocaleDateString(lang) + "</td><td class='text-end'>"
            + (new Intl.NumberFormat(lang, { style: 'decimal' }).format(obj.fee[lang]))
            + "</td>" + btn + "</tr > ");
    });
}

$(document).ready(function () {
    $('body').addClass('loaded');
    changeLang();
    showCourseList();
    if (!window.localStorage.getItem('regCourseList')) {
        let regCourseList = [];
        window.localStorage.setItem('regCourseList', JSON.stringify(regCourseList));
    }


    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
})