def mine_longest_consec(strarr, k):
    retsult = []
    for i in range(0, len(strarr) - (k - 1)):
        elemnt = ""
        for j in range(k):
            element += strarr[i + j]
        retsult.append(element)
    return '' if len(retsult) == 0 else max(retsult, key = len)

def best_longest_consec(strarr, k):
    result = ""

    if k > 0 and len(strarr) >= k:
        for index in range(len(strarr) - k + 1):
            s = ''.join(strarr[index:index+k])
            if len(s) > len(result):
                result = s

    return result