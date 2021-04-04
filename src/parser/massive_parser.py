import os

import msparser


class MassiveParser:

    __all__ = ['language', 'command', 'mem_heap',
               'mem_heap_extra', 'mem_stack', 'mem_total']

    def __init__(self, filename):
        _, language = os.path.splitext(filename)
        print("Parsing valgrind data file ", filename)
        self.language = language.split('.')[-1]
        data = msparser.parse_file(filename)
        peak_index = data['peak_snapshot_index']
        peak_snapshot = data['snapshots'][peak_index]

        self.command = data['cmd']
        self.mem_heap = peak_snapshot['mem_heap']
        self.mem_heap_extra = peak_snapshot['mem_heap_extra']
        self.mem_stack = peak_snapshot['mem_stack']
        self.mem_total = self.mem_heap+self.mem_heap_extra
