from re import findall

def mine_count_smileys(arr):
    eye = [":", ";"]
    nose = ["-", "~"]
    face = [")", "D"]
    count = 0
    for i in arr:
        if len(i) == 2:
            if i[0] in eye and i[1] in face:
                count += 1
        elif len(i) == 3:
            if i[0] in eye and i[1] in nose and i[2] in face:
                count += 1
    return count

def best_count_smileys(arr):
    return len(list(findall(r"[:;][-~]?[)D]", " ".join(arr))))
