$("#spinner")
    .spinner('delay', 200) //delay in ms
    .spinner('changed', function(e, newVal, oldVal) {
        // trigger lazed, depend on delay option.
    })
    .spinner('changing', function(e, newVal, oldVal) {
        // trigger immediately
    });