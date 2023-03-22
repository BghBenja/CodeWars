"""
Given an array of integers of any length, return an array that has 1 added to the value represented by the array.

the array can't be empty
only non-negative, single digit integers are allowed
Return nil (or your language's equivalent) for invalid inputs.

Examples
Valid arrays

[4, 3, 2, 5] would return [4, 3, 2, 6]
[1, 2, 3, 9] would return [1, 2, 4, 0]
[9, 9, 9, 9] would return [1, 0, 0, 0, 0]
[0, 1, 3, 7] would return [0, 1, 3, 8]

Invalid arrays

[1, -9] is invalid because -9 is not a non-negative integer

[1, 2, 33] is invalid because 33 is not a single-digit integer
"""

def mine_up_array(arr):
    if len(arr) == 0:
        return None
    for i in arr:
        if i < 0 or i // 10 > 0:
            return None
    result = arr[::-1]
    for i,v in enumerate(result):
        if v + 1 == 10:
            result[i] = 0
        else:
            result[i] = v + 1
            return result[::-1]
    result.append(1)
    return result[::-1]

def best_up_array(a):
    if not a or any(not 0 <= x < 10 for x in a): return
    for i in range(1, len(a)+1):
        a[-1] = (a[-1] + 1) % 10
        if a[-1]: break
    else: a[:0] = [1]
    return a