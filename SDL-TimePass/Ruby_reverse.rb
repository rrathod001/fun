
print "Enter your first name: "
first_name = gets.chomp
print "Enter your last name: "
last_name = gets.chomp
puts "#{last_name} #{first_name}"

reversed_first_name = first_name.reverse
reversed_last_name = last_name.reverse
puts "#{reversed_last_name} #{reversed_first_name}"

# Manually reversing
# Reverse first name
i = 0
j = first_name.length - 1
while i < j
  temp = first_name[i]
  first_name[i] = first_name[j]
  first_name[j] = temp
  i += 1
  j -= 1
end

# Reverse last name
i = 0
j = last_name.length - 1
while i < j
  temp = last_name[i]
  last_name[i] = last_name[j];
  last_name[j] = temp
  i += 1
  j -= 1
end
puts "#{last_name} #{first_name}"

