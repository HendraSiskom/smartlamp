{{-- teras rumah --}}
<script type="text/javascript">
    const urltr = "{{ url('kirim-status-on-off/teras-rumah') }}"
    $('#switch1').on('change', function () {
        const v1 = $("input[name='teras_rumah']:checked").val()
        console.log('switch1', v1)
        if (v1 === 'on') {
            console.log('on')
            $.get(urltr+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urltr+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>

{{-- ruang tamu --}}
<script type="text/javascript">
    const urlrt = "{{ url('kirim-status-on-off/ruang-tamu') }}"
    $('#switch2').on('change', function () {
        const v2 = $("input[name='ruang_tamu']:checked").val()
        console.log('switch2', v2)
        if (v2 === 'on') {
            console.log('on')
            $.get(urlrt+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urlrt+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>

{{-- kamar utama --}}
<script type="text/javascript">
    const urlku = "{{ url('kirim-status-on-off/kamar-utama') }}"
    $('#switch3').on('change', function () {
        const v3 = $("input[name='kamar_utama']:checked").val()
        console.log('switch3', v3)
        if (v3 === 'on') {
            console.log('on')
            $.get(urlku+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urlku+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>

{{-- kamar kedua --}}
<script type="text/javascript">
    const urlkk = "{{ url('kirim-status-on-off/kamar-kedua') }}"
    $('#switch4').on('change', function () {
        const v4 = $("input[name='kamar_kedua']:checked").val()
        console.log('switch4', v4)
        if (v4 === 'on') {
            console.log('on')
            $.get(urlkk+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urlkk+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>

{{-- dapur --}}
<script type="text/javascript">
    const urld = "{{ url('kirim-status-on-off/dapur') }}"
    $('#switch5').on('change', function () {
        const v5 = $("input[name='dapur']:checked").val()
        console.log('switch5', v5)
        if (v5 === 'on') {
            console.log('on')
            $.get(urld+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urld+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>

{{-- toilet --}}
<script type="text/javascript">
    const urlt = "{{ url('kirim-status-on-off/toilet') }}"
    $('#switch6').on('change', function () {
        const v6 = $("input[name='toilet']:checked").val()
        console.log('switch6', v6)
        if (v6 === 'on') {
            console.log('on')
            $.get(urlt+'/on', (d) => {
                console.log('response', d)
            })
        } else {
            console.log('off')
            $.get(urlt+'/off', (d) => {
                console.log('response', d)
            })
        }
    });
</script>