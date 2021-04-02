import datetime
import os
import re


class TimeParser:
    FIELDS = ['command', 'user_time', 'system_time', 'percent_cpu',
              'elapsed_time', 'avg_shared_text_size', 'avg_unshared_data_size',
              'avg_stack_size', 'avg_total_size', 'max_resident_set_size',
              'avg_resident_set_size', 'major_page_faults', 'minor_page_faults',
              'voluntary_context_switches', 'involuntary_context_switches',
              'swaps', 'file_system_inputs', 'file_system_outputs',
              'socket_messages_sent', 'socket_messages_received', 'signals_delivered',
              'page_size', 'exit_status']

    def __init__(self, filename):
        if not os.path.isfile(filename):
            raise FileNotFoundError(filename)
        with open(filename) as f:
            for line in f.readlines():
                words = line.replace('\t', '').replace('\n', '').split(':', 2)
                if len(words) < 2:
                    continue
                key, value = words[0], words[1].strip().replace('"', '')
                if key == 'Command being timed':
                    self.command = value
                elif key == 'User time (seconds)':
                    self.user_time = float(value)
                elif key == 'System time (seconds)':
                    self.system_time = float(value)
                elif key == 'Percent of CPU this job got':
                    self.percent_cpu = float(just_numbers(value))
                elif key == 'Elapsed (wall clock) time (h':
                    self.elapsed_time = parse_time(value)
                elif key == 'Average shared text size (kbytes)':
                    self.avg_shared_text_size = int(value)
                elif key == 'Average unshared data size (kbytes)':
                    self.avg_unshared_data_size = int(value)
                elif key == 'Average stack size (kbytes)':
                    self.avg_stack_size = int(value)
                elif key == 'Average total size (kbytes)':
                    self.avg_total_size = int(value)
                elif key == 'Maximum resident set size (kbytes)':
                    self.max_resident_set_size = int(value)
                elif key == 'Average resident set size (kbytes)':
                    self.avg_resident_set_size = int(value)
                elif key == 'Major(requiring I/O) page faults':
                    self.major_page_faults: int(value)
                elif key == 'Minor(reclaiming a frame) page faults':
                    self.minor_page_faults: int(value)
                elif key == 'Voluntary context switches':
                    self.voluntary_context_switches = int(value)
                elif key == 'Involuntary context switches':
                    self.involuntary_context_switches = int(value)
                elif key == 'Swaps':
                    self.swaps = int(value)
                elif key == 'File system inputs':
                    self.file_system_inputs = int(value)
                elif key == 'File system outputs':
                    self.file_system_outputs = int(value)
                elif key == 'Socket messages sent':
                    self.socket_messages_sent = int(value)
                elif key == 'Socket messages received':
                    self.socket_messages_received = int(value)
                elif key == 'Signals delivered':
                    self.signals_delivered = int(value)
                elif key == 'Page size (bytes)':
                    self.page_size = int(value)
                elif key == 'Exit status':
                    self.exit_status = int(value)


def just_numbers(value: str) -> str:
    return ''.join([c for c in value if c == '.' or (c >= '0' and c <= '9')])


parse_time_re = r"(\d{1,2})m\s(\d{1,2}.\d{2})s"


def parse_time(value: str) -> datetime.timedelta:
    # 0m 0.03s
    matches = re.findall(parse_time_re, value)
    if len(matches) > 0:
        return datetime.timedelta(minutes=int(matches[0][0]), seconds=float(matches[0][1]))
    return datetime.timedelta(0)
