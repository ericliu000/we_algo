package Stack

func isValid(s string) bool {
	stack := NewArrayStackDefault()
	for i := 0 ; i < len(s) ; i++ {
		c := string(s[i])
		if c == "(" || c == "[" || c == "{" {
			stack.Push(c)
		}else {
			if stack.IsEmpty() {
				return false
			}
			topChar := stack.Pop()
			if c == ")" && topChar != "(" {
				return false
			}
			if c == "]" && topChar != "[" {
				return false
			}
			if c == "}" && topChar != "{" {
				return false
			}
		}
	}
	return stack.IsEmpty()
}