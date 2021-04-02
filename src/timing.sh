if [ "$TIMING" == "valgrind" ]; then
    valgrind --tool=massif --pages-as-heap=yes --massif-out-file=/reports/valgrind.$NAME "$@"    
    # grep mem_heap_B massif.out | sed -e 's/mem_heap_B=\(.*\)/\1/' | sort -g | tail -n 1 > /reports/$NAME.report
else
    /usr/bin/time -v -o /reports/time.$NAME "$@"
fi