desc: --pages-as-heap=yes --massif-out-file=/reports/valgrind.php
cmd: php main.php
time_unit: i
#-----------
snapshot=0
#-----------
time=0
mem_heap_B=1134592
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=1
#-----------
time=214570
mem_heap_B=30003200
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=2
#-----------
time=5646030
mem_heap_B=32100352
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 32100352 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n2: 16261120 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n1: 331776 0x4E4DFFF: ???
     n1: 331776 0x1FFF00034F: ???
      n1: 331776 0x88FFF: ???
       n0: 331776 0x4E4DFFF: ???
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 40960 in 2 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 8192 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=3
#-----------
time=5956503
mem_heap_B=32239616
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=4
#-----------
time=6236836
mem_heap_B=32440320
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=5
#-----------
time=6411994
mem_heap_B=32493568
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=6
#-----------
time=6629126
mem_heap_B=32595968
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=7
#-----------
time=6876679
mem_heap_B=32661504
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=8
#-----------
time=7118238
mem_heap_B=32727040
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=9
#-----------
time=7415969
mem_heap_B=33619968
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=10
#-----------
time=7775610
mem_heap_B=33624064
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=11
#-----------
time=7998765
mem_heap_B=33714176
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=12
#-----------
time=8200478
mem_heap_B=33742848
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=13
#-----------
time=8514039
mem_heap_B=33828864
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=14
#-----------
time=8666748
mem_heap_B=33824768
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=15
#-----------
time=8887373
mem_heap_B=33828864
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=16
#-----------
time=9175329
mem_heap_B=33873920
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=17
#-----------
time=9480527
mem_heap_B=33902592
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=18
#-----------
time=9790747
mem_heap_B=33923072
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 33923072 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 18063360 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 1163264 in 66 places, all below massif's threshold (1.00%)
  n2: 626688 0x1FFEFFE8CF: ???
   n0: 339968 0x1FFEFFE8CF: ???
   n0: 286720 in 3 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 28672 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=19
#-----------
time=10116954
mem_heap_B=33943552
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=20
#-----------
time=10437016
mem_heap_B=33918976
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=21
#-----------
time=10715978
mem_heap_B=33955840
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=22
#-----------
time=10902961
mem_heap_B=33959936
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=23
#-----------
time=11306486
mem_heap_B=33955840
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=24
#-----------
time=11464684
mem_heap_B=33914880
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 33914880 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 18055168 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 1155072 in 69 places, all below massif's threshold (1.00%)
  n2: 626688 0x1FFEFFE8CF: ???
   n0: 339968 0x1FFEFFE8CF: ???
   n0: 286720 in 3 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 28672 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=25
#-----------
time=11748520
mem_heap_B=33947648
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=26
#-----------
time=12027544
mem_heap_B=34304000
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=27
#-----------
time=12271446
mem_heap_B=34308096
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=28
#-----------
time=12436380
mem_heap_B=34332672
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=29
#-----------
time=12704707
mem_heap_B=34398208
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 34398208 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 18534400 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 1482752 in 77 places, all below massif's threshold (1.00%)
  n1: 626688 0x1FFEFFE8CF: ???
   n0: 626688 in 4 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 32768 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=30
#-----------
time=12853839
mem_heap_B=34414592
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=31
#-----------
time=13039544
mem_heap_B=34521088
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=32
#-----------
time=13239026
mem_heap_B=34525184
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=33
#-----------
time=13569978
mem_heap_B=34639872
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=34
#-----------
time=13852773
mem_heap_B=34689024
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=35
#-----------
time=14056387
mem_heap_B=34762752
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=36
#-----------
time=14206392
mem_heap_B=34885632
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=37
#-----------
time=14466835
mem_heap_B=34959360
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=38
#-----------
time=14602415
mem_heap_B=35028992
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=39
#-----------
time=14806278
mem_heap_B=35217408
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 35217408 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 19345408 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 2191360 in 134 places, all below massif's threshold (1.00%)
  n1: 626688 0x1FFEFFE8CF: ???
   n0: 626688 in 4 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 40960 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=40
#-----------
time=15071583
mem_heap_B=35287040
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=41
#-----------
time=15397168
mem_heap_B=35303424
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=42
#-----------
time=15613903
mem_heap_B=35344384
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 35344384 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 19472384 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 2285568 in 143 places, all below massif's threshold (1.00%)
  n1: 626688 0x1FFEFFE8CF: ???
   n0: 626688 in 4 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 40960 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=43
#-----------
time=15900631
mem_heap_B=35418112
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=44
#-----------
time=16028548
mem_heap_B=35454976
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=45
#-----------
time=54812366
mem_heap_B=35454976
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=peak
n3: 35454976 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n3: 19578880 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n0: 331776 in 1 place, below massif's threshold (1.00%)
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 2392064 in 153 places, all below massif's threshold (1.00%)
  n1: 626688 0x1FFEFFE8CF: ???
   n0: 626688 in 4 places, all below massif's threshold (1.00%)
 n0: 15831040 0x0: ???
 n0: 45056 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=46
#-----------
time=54955702
mem_heap_B=35229696
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=47
#-----------
time=55149924
mem_heap_B=35168256
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=48
#-----------
time=55383014
mem_heap_B=35074048
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=49
#-----------
time=55553942
mem_heap_B=34926592
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=50
#-----------
time=55683245
mem_heap_B=34852864
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=51
#-----------
time=55821282
mem_heap_B=34746368
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=52
#-----------
time=55949461
mem_heap_B=34643968
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=53
#-----------
time=56083240
mem_heap_B=34562048
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=54
#-----------
time=56223692
mem_heap_B=34463744
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=55
#-----------
time=56586244
mem_heap_B=34332672
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=56
#-----------
time=56719512
mem_heap_B=32083968
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=57
#-----------
time=56859573
mem_heap_B=31985664
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=58
#-----------
time=57201107
mem_heap_B=31920128
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=detailed
n3: 31920128 (page allocation syscalls) mmap/mremap/brk, --alloc-fns, etc.
 n4: 16044032 0x40363E1: mmap (in /lib/ld-musl-x86_64.so.1)
  n6: 14123008 0x1FFEFFFE9F: ???
   n0: 7610368 0x1FFEFFFE9F: ???
   n0: 2813952 in 29 places, all below massif's threshold (1.00%)
   n1: 1404928 0x74FFF: ???
    n1: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 1404928 0x1FFF00034F: ???
      n1: 1404928 0x280FFF: ???
       n0: 1404928 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
   n2: 1040384 0x2DFFF: ???
    n1: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
     n1: 708608 0x1FFF00034F: ???
      n1: 708608 0x129FFF: ??? (in /usr/local/bin/php)
       n0: 708608 0x48A7FFF: ??? (in /usr/lib/libargon2.so.1)
    n1: 331776 0x4E4DFFF: ???
     n1: 331776 0x1FFF00034F: ???
      n1: 331776 0x88FFF: ???
       n0: 331776 0x4E4DFFF: ???
   n1: 667648 0xEFFF: ???
    n1: 667648 0x4CD3FFF: ???
     n1: 667648 0x1FFF00034F: ???
      n1: 667648 0xE9FFF: ???
       n0: 667648 0x4CD3FFF: ???
   n1: 540672 0x1CBFFF: ??? (in /usr/local/bin/php)
    n1: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
     n1: 540672 0x1FFF00034F: ???
      n1: 540672 0x280FFF: ???
       n0: 540672 0x4A52FFF: ??? (in /lib/libssl.so.1.1)
  n0: 790528 in 152 places, all below massif's threshold (1.00%)
  n2: 626688 0x1FFEFFE8CF: ???
   n0: 339968 0x1FFEFFE8CF: ???
   n0: 286720 in 3 places, all below massif's threshold (1.00%)
  n1: 331776 0x541EF1F: ???
   n1: 331776 0x4FF002F: ???
    n1: 331776 0x4FFFF: ???
     n1: 331776 0x13299FF: ???
      n1: 331776 0x4FFFF: ???
       n1: 331776 0x53546CF: ???
        n1: 331776 0x50013: ???
         n1: 331776 0x4024860: ??? (in /lib/ld-musl-x86_64.so.1)
          n1: 331776 0x4FFFF: ???
           n1: 331776 0x13299FF: ???
            n1: 331776 0x534C6CF: ???
             n1: 331776 0x53546CF: ???
              n1: 331776 0xCF5DCD0E1D63F216: ???
               n1: 331776 0x5F12C8: __zend_malloc (in /usr/local/bin/php)
                n1: 331776 0x62AE94: ??? (in /usr/local/bin/php)
                 n1: 331776 0x62B202: zend_hash_add_new (in /usr/local/bin/php)
                  n1: 331776 0x697AB7: ??? (in /usr/local/bin/php)
                   n1: 331776 0x4DA3FA: ??? (in /usr/local/bin/php)
                    n1: 331776 0x6218B6: zend_startup_module_ex (in /usr/local/bin/php)
                     n1: 331776 0x62194B: ??? (in /usr/local/bin/php)
                      n1: 331776 0x62EB71: zend_hash_apply (in /usr/local/bin/php)
                       n1: 331776 0x5BA68D: php_module_startup (in /usr/local/bin/php)
                        n1: 331776 0x6AA90C: ??? (in /usr/local/bin/php)
                         n1: 331776 0x3493D0: ??? (in /usr/local/bin/php)
                          n1: 331776 0x401CA02: ??? (in /lib/ld-musl-x86_64.so.1)
                           n1: 331776 0x401C9DB: ??? (in /lib/ld-musl-x86_64.so.1)
                            n0: 331776 0x1FFF0009DF: ???
 n0: 15831040 0x0: ???
 n0: 45056 in 2 places, all below massif's threshold (1.00%)
#-----------
snapshot=59
#-----------
time=57364839
mem_heap_B=31854592
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=60
#-----------
time=57516867
mem_heap_B=31789056
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=61
#-----------
time=57812146
mem_heap_B=31076352
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
#-----------
snapshot=62
#-----------
time=58206247
mem_heap_B=31039488
mem_heap_extra_B=0
mem_stacks_B=0
heap_tree=empty
