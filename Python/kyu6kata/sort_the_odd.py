"""
You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

Examples
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
"""

def mine_sort_arry(source_array):
    pos = 0
    odds = [x for x in source_array if x % 2 != 0]
    odds.sort()
    result = []
    for i in source_array:
        if i % 2 == 0:
            result.append(i)
        else:
            result.append(odds[pos])
            pos += 1
    return result

def best_sort_arry(arr):
    odds = sorted((x for x in arr if x%2 != 0),reverse=True)
    return [x if x%2==0 else odds.pop() for x in arr]