var assert = require('assert'),
      matcher = require('../lib/Matching.js');

module.exports = {
    'test_empty': function() {
        assert.ok(matcher.isValidSyntax(''));
    },
    'test_valid_selection_simple': function() {
        assert.ok(matcher.isValidSyntax('()'));
    },
    'test_invalid_selection_simple': function() {
        assert.ok(!matcher.isValidSyntax('('));
        assert.ok(!matcher.isValidSyntax(')'));
        assert.ok(!matcher.isValidSyntax(')('));
    },
    'test_valid_selection_complex': function() {
        assert.ok(matcher.isValidSyntax("((()()))()()()"));
        assert.ok(matcher.isValidSyntax("()()()((()()))"));
        assert.ok(matcher.isValidSyntax("()()((()()()))()()"));
        assert.ok(matcher.isValidSyntax("(()()((()()()))()())"));
    },
    'test_invalid_selection_complex': function() {
        assert.ok(!matcher.isValidSyntax("(()()))()()()"));
        assert.ok(!matcher.isValidSyntax("()()()((()())"));
        assert.ok(!matcher.isValidSyntax(")()((()()()))()()"));
        assert.ok(!matcher.isValidSyntax("(()()((()()()))()()"));
    },
    'test_valid_selection_complex_extra': function() {
        assert.ok(matcher.isValidSyntax("{((()[]))(){}()}"));
        assert.ok(matcher.isValidSyntax("{}{}{}[(()())]"));
        assert.ok(matcher.isValidSyntax("()()(({}[]{}))()()"));
        assert.ok(matcher.isValidSyntax("[[]()((()()()))()()]"));
    },
    'test_invalid_selection_complex_extra': function() {
        assert.ok(!matcher.isValidSyntax("{((()[]))(){}()"));
        assert.ok(!matcher.isValidSyntax("{{}{}[(()())]"));
        assert.ok(!matcher.isValidSyntax("]()()(({}[]{}))()()"));
        assert.ok(!matcher.isValidSyntax("[[]()((()()()))()()]{"));
    },
    'test_invalid_selection_complex_extra_extra': function() {
        assert.ok(!matcher.isValidSyntax("{(})"));
    },
};