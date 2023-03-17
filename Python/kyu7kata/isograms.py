"""
An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

Example: (Input --> Output)

"Dermatoglyphics" --> true "aba" --> false "moOse" --> false (ignore letter case)
"""

def mine_is_isogram(s):
    for i in s:
        if s.lower().count(i.lower()) > 1:
            return False
    return True

def best_is_isogram(s):
    return len(s) == len(set(s.lower()))