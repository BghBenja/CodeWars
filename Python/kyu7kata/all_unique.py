"""
Write a program to determine if a string contains only unique characters. Return true if it does and false otherwise.

The string may contain any of the 128 ASCII characters. Characters are case-sensitive, e.g. 'a' and 'A' are considered different characters.
"""

def mine_has_unique_chars(string):
    return len(string) == len(set(string))

def best_has_unique_chars(s):
    return len(s)==len(set(s))