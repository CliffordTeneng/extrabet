
  $(document).ready(function(){
      var url = $(location).attr("href");

      if(url.includes('status=success') || url.includes('status=regs')){
        window.location.href = 'home.php';
      }
    //   http://localhost/extrabet/admin/home.php?status=regs

    $("#logout").click(function(){
        $.post("../actions.php", "logout=logout", function(data){
                data = data.trim();
                    location.reload(true);
                
            });
    })

    $(".add_match").hide();
    $(".result").hide();
    $(".up_coming").hide();

    $(".add_match_btn").click(function(){
        $(".add_match").toggle(1000);
    });
    $(".result_btn").click(function(){
        $(".result").toggle(1000);
    });
    $(".up_coming_btn").click(function(){
        $(".up_coming").toggle(1000);
    });

    $(".clearM").click(function(){
       $("#matchNameM, #teamAM, #teamBM, #tipM, #dateM").val("")
    })

    $(".clearR").click(function(){
        $(".results").val("");
        $(" .won, .lost").prop("checked", false);

        var result = $("[class^='result']")
      
       for(let i = 0; i<result.length; i++){
           $(".results" + (i+1)).val("")
           $("[class^='"+(i+1)+"won'] , [class^='"+(i+1)+"lost']").prop("checked", false)
           
       }
     })

     $(".clearU").click(function(){
        $("#matchNameU, #teamAU, #teamBU, #dateU").val("")
     })

    //  $("#saveM").click(function(e){
    //      e.preventDefault();
    //     var match_nameM = $("#matchNameM").val()
    //     var teamA = $("#teamAM").val()
    //     var teamB = $("#teamBM").val()
    //     var tip = $("#tipM").val()
    //     var date_input = $("#dateM").val()

    //     $.post("../actions.php", "match_nameM="+match_nameM+"&teamA="+teamA+"&teamB="+teamB+"&tip="+tip+"&date_input="+date_input, function(data){
    //         data = data.trim();
    //         console.log(data)
    //         if(data==1){
    //             location.reload(true);
    //             alert("Match added successfully!")
    //         }
    //     })

    //  })

     $("#saveR").click(function(e){
        e.preventDefault();

        var data = [];
        var resultArr = [];
        var status = [];
        var id = []
        // id, result, won
        var statusArrClassL = [];
        
       var result = $("[class^='result']")
      
       for(let i = 0; i<result.length; i++){
           resultArr[i] = $(".results" + (i+1)).val()
           statusArrClassL[i] = $("[class^='"+(i+1)+"won']")
           status[i] = statusArrClassL[i].is(":checked");
            id[i] = statusArrClassL[i].attr("class").split(' ')[1]
       }
       for(var i in resultArr){

        data.push({
            id: id[i],
            result: resultArr[i],
            status: status[i]
        })

       }
       let datas = JSON.stringify(data)
       $.post("../actions.php", "saveResult="+datas, function(data){
           
            data = data.trim();
            if(data==1){
                window.location.href = 'home.php?status=successs';
            }

        })

    })

    // $("#saveU").click(function(e){
    //     e.preventDefault();
    //    var match_nameU = $("#matchNameU").val()
    //    var teamA = $("#teamAU").val()
    //    var teamB = $("#teamBU").val()
    //    var date_input = $("#dateU").val()
       
    //     $.post("../actions.php", "match_nameU="+match_nameU+ "&teamA="+teamA+ "&teamB="+teamB+ "&date_input="+date_input, function(data){
    //         data = data.trim();
    //         if(data==1){
    //             location.reload(true);
    //         }
    //     })

    // })


   });