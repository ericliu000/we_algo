package Stack

import (
	"fmt"
	"testing"
)

func TestValidParenthese(t *testing.T)  {
	fmt.Println(isValid("()[]{}"))
	fmt.Println(isValid("([)]"))
}
