const indicator = document.querySelector('.nav-indicator');
const items = document.querySelectorAll('.nav-item');

function handleIndicator(el) {
  items.forEach(item => {
    item.classList.remove('is-active');
    item.removeAttribute('style');
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute('active-color');

  el.classList.add('is-active');
  el.style.color = el.getAttribute('active-color');
}


items.forEach((item, index) => {
  item.addEventListener('click', e => {handleIndicator(e.target);});
  item.classList.contains('is-active') && handleIndicator(item);
});



class StickyNavigation {
    constructor() {
        this.currentId = null;
        this.currentTab = null;
        this.tabContainerHeight = 70;
        let self = this;
        $(".et-hero-tab").click(function () {
            self.onTabClick(event, $(this));
        });
        $(window).scroll(() => {
            this.onScroll();
        });
        $(window).resize(() => {
            this.onResize();
        });
    }

    onTabClick(event, element) {
        event.preventDefault();
        let scrollTop =
            $(element.attr("href")).offset().top - this.tabContainerHeight + 1;
        $("html, body").animate({ scrollTop: scrollTop }, 600);
    }

    onScroll() {
        this.checkTabContainerPosition();
        this.findCurrentTabSelector();
    }

    onResize() {
        if (this.currentId) {
            this.setSliderCss();
        }
    }

    checkTabContainerPosition() {
        let offset =
            $(".et-hero-tabs").offset().top +
            $(".et-hero-tabs").height() -
            this.tabContainerHeight;
        if ($(window).scrollTop() > offset) {
            $(".et-hero-tabs-container").addClass("et-hero-tabs-container--top");
        } else {
            $(".et-hero-tabs-container").removeClass("et-hero-tabs-container--top");
        }
    }

    findCurrentTabSelector(element) {
        let newCurrentId;
        let newCurrentTab;
        let self = this;
        $(".et-hero-tab").each(function () {
            let id = $(this).attr("href");
            let offsetTop = $(id).offset().top - self.tabContainerHeight;
            let offsetBottom =
                $(id).offset().top + $(id).height() - self.tabContainerHeight;
            if (
                $(window).scrollTop() > offsetTop &&
                $(window).scrollTop() < offsetBottom
            ) {
                newCurrentId = id;
                newCurrentTab = $(this);
            }
        });
        if (this.currentId != newCurrentId || this.currentId === null) {
            this.currentId = newCurrentId;
            this.currentTab = newCurrentTab;
            this.setSliderCss();
        }
    }

    setSliderCss() {
        let width = 0;
        let left = 0;
        if (this.currentTab) {
            width = this.currentTab.css("width");
            left = this.currentTab.offset().left;
        }
        $(".et-hero-tab-slider").css("width", width);
        $(".et-hero-tab-slider").css("left", left);
    }
}

new StickyNavigation();

// Exportar tabla a Excel ******

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


$(document).ready(function () {
    $('#example').DataTable({
        dom: '<"top"B>r<"bottom">',
        pageLength: 20,
        buttons:{
            dom:{
                button:{
                    clasName: 'btn'
                }
            },
            buttons:[
                {
                    extend:"excel",
                    text:'<i class="fa fa-file-excel-o">Excel</i>',
                    className: 'btn btn-dark ',
                    excelStyles:{
                        template: 'header_blue'
                    }
                },

                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf-o">pdf</i>',
                    className: 'btn btn-danger ',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }
                }
            ]
        }
    });
});

$(document).ready(function () {
    $('#vista').DataTable({
        dom: 'Brt',
        pageLength: 20,
        buttons: {
            dom:{
                button:{
                    clasName: 'btn'
                }
            },
            buttons:[
            
                {
                    extend:"excel",
                    text:'<i class="fa fa-file-excel-o">Excel</i>',
                    className: 'btn btn-dark ',
                    excelStyles:{
                        template: 'header_blue'
                    }
                },

                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf-o">pdf</i>',
                    className: 'btn btn-danger ',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }
                }
               
            ]
        }
    });
});
