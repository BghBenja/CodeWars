"""
Given a string of words, you need to find the highest scoring word.

Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.

For example, the score of abad is 8 (1 + 2 + 1 + 4).

You need to return the highest scoring word as a string.

If two words score the same, return the word that appears earliest in the original string.

All letters will be lowercase and all inputs will be valid.
"""

def mine_high(x):
    words = x.split()
    result = ""
    score = 0
    for word in words:
        current_score = 0
        for letter in word:
            current_score += ord(letter) - 96
        if current_score > score:
            score = current_score
            result = word
    return result

def best_high(x):
    return max(x.split(), key=lambda k: sum(ord(c) - 96 for c in k))