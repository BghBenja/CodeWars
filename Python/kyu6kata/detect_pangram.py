"""
A pangram is a sentence that contains every single letter of the alphabet at least once. For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram, because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram. Return True if it is, False if not. Ignore numbers and punctuation.
"""

def mine_is_pangram(s):
    abc = "abcdefghijklmnopqrstuvwxyz"
    for char in abc:
        if char not in s.lower():
            return False
    return True

def best_is_pangram(s):
    s = s.lower()
    for char in "abcdefghijklmnopqrstuvwxyz":
        if char not in s:
            return False
    return True

import string

def clever_is_pangram(s):
    return set(string.ascii_lowercase).issubset(s.lower())